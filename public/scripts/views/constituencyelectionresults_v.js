var app = app || {};

define([
    'backbone',
    'text!templates/constituency-results-table.html',
], function(
    Backbone,
    ConstituencyResultsTemplate
) {
    var ConstituencyElectionResultsView = Backbone.View.extend({
        tagName : 'div',
        attributes : {
            class : 'col-md-6'
        },
        template : _.template(ConstituencyResultsTemplate),
        initialize : function() {
            app.pages.results.append(this.$el);
            this.render();
            this.listenTo(app.collections.constituencyresults, 'reset', this.render);
        },
        render : function() {
            this.$el.html(this.template({results : app.collections.constituencyresults.toJSON()}));
            return this.el;
        },
    });
    
    return ConstituencyElectionResultsView;
})