import formCtrl from './formCtrl';
import fileUpload from './file-upload';
import validation from './validation';
import search from './search';
import { checkSupport } from './v/index';

checkSupport();

formCtrl.init();
fileUpload.init();
search.init();
validation.init();
