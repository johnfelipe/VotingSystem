var app = app || {};

define([
    'backbone'
], function(
    Backbone
) {
    var Router = Backbone.Router.extend({
        routes: {
            ""          : "start",
            "start"     : "start",
            "vote"      : "vote",
            "dont_vote"  : "dont_vote" ,
        },
        start: function() {
            app.showPages(['start']);
        },
        vote: function() {
            app.showPages(['vote']);
        },
        dont_vote:function() {
            app.showPages(['dont_vote']);
        }
    });
    return Router;
});