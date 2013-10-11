var app = app || {};

define([
    'backbone'
], function(
    Backbone
) {
    var VoterModel = Backbone.Model.extend({
        defaults : {
            "name" : "",
            "party_id" : null,
            "constituency_id" : null,
            "voting" : 1
        },
        validate : function(attr, opts) {
            // very basic name validation.
            if(!attr.name.match(/[\w- ]/i)) {
                return 'Please enter your name';
            }
        },
        urlRoot : '/data/voter'
    });
    
    return VoterModel;
});