/* global STARPACK */
import _ from 'lodash';

// The Starpack Laravel package will output a global
// variable named STARPACK, which is an array of objects.
// We will merge it into a single object so we can
// easily access all of the data.
export const data = _.merge(...STARPACK);

/**
 * Get the value at path of the Starpack environment data.
 *
 * @param  {Array|string} path         The path of the property to get.
 * @param  {defaultValue} defaultValue The value returned for undefined resolved values.
 * @return {*}              Returns the resolved value.
 */
export default (path, defaultValue = null) => _.get(data, path, defaultValue);
