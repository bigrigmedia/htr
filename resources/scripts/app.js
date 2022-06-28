import { domReady } from '@roots/sage/client'

/**
 * Internal dependencies
 */
import './logo'
import './nav'
import './destinations'
import './hero'
import './backgrounds'
import './faqs'
import './pickers'
import './modals'
import './carousel'
import './layout'
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
  console.log('Built by Ernesto Arellano - Front-End Engineer')
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
