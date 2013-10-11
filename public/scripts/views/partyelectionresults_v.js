var app = app || {};

define([
    'backbone',
    'text!templates/party-results-table.html',
], function(
    Backbone,
    PartyResultsTemplate
) {
    var PartyElectionResultsView = Backbone.View.extend({
        tagName : 'div',
        attributes : {
            class : 'col-md-6'
        },
        template : _.template(PartyResultsTemplate),
        initialize : function() {
            app.pages.results.append(this.$el);
            this.render();
            this.listenTo(app.collections.partyresults, 'reset', this.render);
        },
        render : function() {
            this.$el.html(this.template({results : app.collections.partyresults.toJSON()}));
            return this.el;
        },
    });
    
    return PartyElectionResultsView;
})