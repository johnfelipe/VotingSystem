var app = app || {};

define([
    'backbone'
], function(
    Backbone
) {
    var VoterModel = Backbone.Model.extend({
        defaults : {
            "name" : "",
            "mp_id" : null,
            "constituency_id" : null,
            "voting" : 1
        },
        validate : function(attr, opts) {
            if(!attr.name.match(/[\w-_]/i)) {
                console.log('oops your names wrong!');
                return {error : 'poop'};
            }
        },
        urlRoot : '/data/voter'
    });
    
    return VoterModel;
});