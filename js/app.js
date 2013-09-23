function loadTemplates(templates, callback) {
    var _loadCount = 0;
    $('body').bind('templates_loaded', callback);
    
    if(templates.length === 0){
        $('body').trigger('templates_loaded');
    }else{
        $(templates).each(function(i, el) {
            var _tpl = $('<script>');
            _tpl.attr('type', 'text/x-handlebars');
            var _tplName = this.substring(0, this.indexOf('.'));
            _tpl.attr('data-template-name', _tplName);
            console.info('loading '+el);
            $.ajax({
                cache: false,
                async: false,
                type: 'GET',
                url: 'partials/' + el,
                success: function(resp) {
                    _tpl.html(resp);
                    $('body').append(_tpl);
                    $(function() {
                        _loadCount++;
                        if (_loadCount === templates.length) {
                            $('body').trigger('templates_loaded');
                            console.info('templates_loaded triggered ');
                        }
                    });
                }
            });
        });
    }
}

loadTemplates(['index.html', 'error.html', 'login.html', 'lists.html', 'dashboard.html', 'forms.html'], function() {
    App = Ember.Application.create({
        rootElement: '.bsa-master'
    });

    App.Router.map(function() {
        this.route("login", { path: "/login" });
        this.route("dashboard", { path: "/dashboard" });
        this.route("error", { path: "/error" });
        this.route("forms", { path: "/forms" });
        this.route("lists", { path: "/lists" });
    });

    App.IndexRoute = Ember.Route.extend({
        model: function() {
            return ['red', 'yellow', 'blue'];
        }
    });
});

$(window).on('load', function() {
    $(function() {
        $('.bsa-overlay-loader').fadeOut();
    });
});