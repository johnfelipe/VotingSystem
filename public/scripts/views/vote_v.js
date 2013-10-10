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
                        name : 'mps',
                        label : 'Who are you going to vote for?',
                        options : app.collections.constituencies,
                        selectedAttribute : 'mp_name',
                        loadingMessage : 'Loading MP data ...'
                    })}
                )
            );
            this.render();
        },
        events : {
            'click #cast_vote' : function(e) {
                e.preventDefault();
                app.voter.set({name : this.$el.find('#voter_name_control').val()});
                app.voter.save();
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