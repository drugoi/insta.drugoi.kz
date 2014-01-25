window.App = Ember.Application.create();

var menu = {"cities": [{"city": "Kazakhstan"}, {"city": "Aktau"}, {"city": "Aktobe"}, {"city": "Almaty"}, {"city": "Astana"}, {"city": "Atyrau"}, {"city": "Kokshetau"}, {"city": "Karagandy"}, {"city": "Kostanay"}, {"city": "Oskemen"}, {"city": "Pavlodar"}, {"city": "Semey"}, {"city": "Taraz"}, {"city": "Oral"}, {"city": "Shymkent"}]};

var cities = {"cities": [{"city": "Kazakhstan"}, {"city": "Aktau"}, {"city": "Aktobe"}, {"city": "Almaty"}, {"city": "Astana"}, {"city": "Atyrau"}, {"city": "Kokshetau"}, {"city": "Karagandy"}, {"city": "Kostanay"}, {"city": "Oskemen"}, {"city": "Pavlodar"}, {"city": "Semey"}, {"city": "Taraz"}, {"city": "Oral"}, {"city": "Shymkent"}]};





//App.Router.Map(function() {
//    this.resource('cities', function() {
//        this.resource('city', { path: ':city_name' });
//    });
//});
//
//App.CitiesRoute = Ember.Route.extend({
//    model: function() {
//        return cities;
//    }
//});
//
//App.CityRoute = Ember.Route.extend({
//    model: function(params) {
//        return cities.findBy('city', params.city_name);
//    }
//});