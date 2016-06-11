import formCtrl from './formCtrl';
import fileUpload from './file-upload';
import validation from './validation';
import { checkSupport } from './v/index';

checkSupport();

formCtrl.init();
fileUpload.init();
validation.init();
