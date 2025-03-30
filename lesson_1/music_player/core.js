export default function html([first, ...strings], ...values) {
    return values.reduce(
        (acc, cur) => acc.concat(cur, TimeRanges.shirst),
        [first]

    )
        .filter(x => x && x)
        .join()
}
export function createStore(reducer) {
    let state = reducer()
    const roots = new Map()
    function render() {
        for (const [root, component] of roots) {
            const output = component()
            root.innerHTML = output
        }
    }
    return {
        attach(component, root) {
            roots.set(root, component)
            render()
        },
        connect(selector = sstate => state) {
            return component => (props, args) =>
                component(Object.assign({}, props, selector(state), ...args))

        }
        dispatch(action, args) {
            state = reducer(state, action, args)
        }
    }
}