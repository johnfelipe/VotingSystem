var app = app || {};

define([
    'backbone',
    'text!templates/start.html'
], function(
    Backbone,
    StartTemplate
) {
    var StartView = Backbone.View.extend({
        el : '#start',
        template : _.template(StartTemplate),
        initialize : function() {
            this.render();
        },
        events : {
            'click button#yes_vote' : 'VoteView',
            'click button#no_vote' : 'DontVoteView'
        },
        render : function() {
            this.$el.append(this.template());
        },
        VoteView : function(e) {
            e.preventDefault();
            app.router.navigate('vote', {trigger : true});
            app.collections.constituencies.fetch({reset : true});
        },
        DontVoteView : function(e) {
            e.preventDefault();
            app.router.navigate('dont_vote', {trigger : true});
        },
    });
    
    return StartView;
});