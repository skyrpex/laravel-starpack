import root from './root';

// Create the root component's container div.
const container = document.createElement('div');
document.body.appendChild(container);

// Mount the root component.
root.$mount(container);

// In case that you load your scripts in the head, there's
// a chance that the document body isn't ready yet.
// In that case, you may want to use `domready`'s package
// to wait for it to be ready.
