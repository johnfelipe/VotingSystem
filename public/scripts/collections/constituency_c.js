var APP = APP || {};

define([
    'backbone'
], function(
    Backbone
) {
    var ConstituencyCollection = Backbone.Collection.extend({
        'url' : '/data'
    });
    return ConstituencyCollection;
});