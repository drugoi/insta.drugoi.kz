/* Template Settings */

//Title settings
var title_source = '';

//Menu settings
var menu_source = '<ul>{{#cities}}<li class="e-menu__item"><a href="//insta.drugoi.kz/{{city}}">{{city}}</a></li>{{/cities}}</ul>';
var menu_template = Handlebars.compile(menu_source);

var menu_items = {"cities": [{"city": "Kazakhstan"}, {"city": "Aktau"}, {"city": "Aktobe"}, {"city": "Almaty"}, {"city": "Astana"}, {"city": "Atyrau"}, {"city": "Kokshetau"}, {"city": "Karagandy"}, {"city": "Kostanay"}, {"city": "Oskemen"}, {"city": "Pavlodar"}, {"city": "Semey"}, {"city": "Taraz"}, {"city": "Oral"}, {"city": "Shymkent"}]};

var menu_render = menu_template(menu_items);





//Template helpers
Handlebars.registerHelper('toLowerCase', function(value) {
    if(object) {
        return new Handlebars.SafeString(value.toLowerCase());
    } else {
        return '';
    }
});