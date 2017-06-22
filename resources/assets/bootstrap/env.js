/* global STARPACK */
import _ from 'lodash';

export const data = _.merge(...STARPACK);

export default (...args) => _.get(data, ...args);
