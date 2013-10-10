var app = app || {};

define([
    'backbone'
], function(
    Backbone
) {
    var InputSelectModel = Backbone.Model.extend({
        defaults : {
            name : '',
            label : '',
            options : [],
            selectedAttribute : '',
            loadingMessage : 'Loading data...'
        }
    });
    
    return InputSelectModel;
});