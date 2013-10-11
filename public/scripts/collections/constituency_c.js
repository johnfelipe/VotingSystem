var app = app || {};

define([
    'backbone',
    'models/constituency_m'
], function(
    Backbone,
    Constituency
) {
    var ConstituencyCollection = Backbone.Collection.extend({
        model : Constituency,
        url : '/data/constituencies'
    });
    return ConstituencyCollection;
});