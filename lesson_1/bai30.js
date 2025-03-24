if (!String.prototype.includes) {
    String.prototype.includes = function (search, start) {
        'use strict';
        if (search instanceof RegExp) {
            throw TypeError('first argument must');

        }
        if (start === undefined) { start = 0; }
        return this.indexOf(search, start) !== -1;
    };
}
