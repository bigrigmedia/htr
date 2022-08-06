import { domReady } from '@roots/sage/client'

/**
 * Internal dependencies
 */
import './anchors'
import './backgrounds'
import './carousel'
import './destinations'
import './faqs'
import './hero'
import './layout'
import './logo'
import './modals'
import './nav'
import './pickers'
import './top'

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
  //console.log('Built by Ernesto Arellano - Front-End Engineer')
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
