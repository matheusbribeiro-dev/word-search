import DomSelector from './dom-selector'

export default class WordSearchForm {
  constructor () {
    this._form = new DomSelector('form#wordSearch');
  }
}