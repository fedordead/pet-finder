import formSetup from './form';
import fileUpload from './file-upload';
import validation from './validation';
import { checkSupport } from './v/index';

checkSupport();

formSetup.init();
fileUpload.init();
validation.init();
