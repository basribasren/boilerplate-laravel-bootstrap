// import * as $ from 'jquery';
import PerfectScrollbar from 'perfect-scrollbar';
// const PerfectScrollbar = require('perfect-scrollbar');

export default (function () {
  const scrollables = $('.scrollable');
  if (scrollables.length > 0) {
    scrollables.each((index, el) => {
      new PerfectScrollbar(el);
    });
  }
}());
