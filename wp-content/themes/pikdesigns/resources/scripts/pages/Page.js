export default class Page {
    /**
     * 
     * @param {String} className 
     */
    constructor(className) {
        if (!document.body.classList.contains(className))
            return

        this.init()
    }

    init() { }
}