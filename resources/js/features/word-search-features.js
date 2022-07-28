import WordSearchClass from '../modules/word-search-class'
import FormClass from '../modules/form-class'
import WordsClass from '../modules/words-class'
import ApiClass from '../modules/api-class'

export default function () {
  const wordSearch = new WordSearchClass({
    form: new FormClass({
      form: 'wordSearchForm',
      api: new ApiClass()
    }),
    words: new WordsClass()
  });

  wordSearch.initFeatures();
}