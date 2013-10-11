var app = app || {};

define([
    'backbone',
    'text!templates/input-select.html',
    'models/input_select_m'
], function(
    Backbone,
    InputSelectTemplate,
    InputSelectModel
) {
    var InputSelect = Backbone.View.extend({
        tagName : 'div',
        attributes : {
            'class' : 'margin-bottom-10'
        },
        model: InputSelectModel,
        template : _.template(InputSelectTemplate),
        initialize : function() {
            this.render();
            this.listenTo(this.model.get('options'), 'reset', this.render);
        },
        render : function() {
            this.$el.html(this.template({model : this.model.toJSON()}));
            return this.el;
        },
    });
    
    return InputSelect;
})