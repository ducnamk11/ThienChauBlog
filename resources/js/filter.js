//support Moment js
import Vue from 'vue'
import moment from 'moment'

Vue.filter('timeformat', (arg) => {
    return moment(arg).format("   MMMM Do YYYY, H:mm")
})
Vue.filter('sortlength', function (text, length, suffix) {
    return text.substring(0, length) + suffix;
})
Vue.filter('strippedContent', function (string,length,suffix) {
    return (string.replace(/<\/?[^>]+>/ig, " ").substring(0, length) + suffix);
})
