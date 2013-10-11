var app = app || {};

define([
    'backbone',
    'text!templates/voting-form.html',
    'views/input_select_v',
    'models/input_select_m'
], function(
    Backbone,
    VoteTemplate,
    InputSelectView,
    InputSelectModel
) {
    var VoteView = Backbone.View.extend({
        el : '#vote',
        subTemplates: new Array(),
        template : _.template(VoteTemplate),
        initialize : function() {
            this.listenTo(app.voter, 'invalid', function(model, error) {
                var name = $('#voter_name');
                name.addClass('has-error').find('span.help-block').text(error);
            });
            
            this.subTemplates.push(
                new InputSelectView(
                    {model : new InputSelectModel ({
                        name : 'constituencies',
                        label : 'Please specify your constituency',
                        options : app.collections.constituencies,
                        selectedAttribute : 'constituency',
                        loadingMessage : 'Loading constituency data ...'
                    })}
                )
            );
            this.subTemplates.push(
                new InputSelectView(
                    {model : new InputSelectModel ({
                        name : 'party',
                        label : 'Who are you going to vote for?',
                        options : app.collections.political_parties,
                        selectedAttribute : 'name',
                        loadingMessage : 'Loading Political party data ...'
                    })}
                )
            );
            this.render();
        },
        events : {
            'click #cast_vote' : function(e) {
                e.preventDefault();
                app.voter.save({
                    name : this.$el.find('#voter_name_control').val(),
                    constituency_id : this.$el.find('#constituencies_control').val(),
                    party_id : this.$el.find('#party_control').val()
                });
                
                if(app.voter.isValid()) {
                    app.showPages(['results']);
                    app.collections.partyresults.fetch({reset : true});
                    app.collections.constituencyresults.fetch({reset : true});
                }
            }
        },
        
        render : function() {
            this.$el.append(this.template())       
            
            _.each(this.subTemplates, function(template) {
                this.$el.find('#input_selects').append(template.render());
            }, this);
        }
    });
    
    return VoteView;
});