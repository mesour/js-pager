import Pager from './Pager.jsx';
import 'mesour-core/dist/mesour.min.js';

(function(mesour) {
	mesour.createWidget('pager', new Pager());
})(window.mesour);

import './../sass/style.sass';

export default Pager;