// import {MDCFoundation, MDCComponent} from '@material/base/index';
// import {ponyfill} from '@material/dom/index';
// import {transformStyleProperties, getCorrectEventName, getCorrectPropertyName} from '@material/animation/index';
import {MDCFloatingLabel, MDCFloatingLabelFoundation} from '@material/floating-label/index';
import {MDCFormField, MDCFormFieldFoundation} from '@material/form-field/index';
import {MDCRipple} from '@material/ripple/index';
import {MDCCheckboxFoundation, MDCCheckbox} from '@material/checkbox/index';
import {MDCSnackbarFoundation} from '@material/snackbar/index';
import {MDCTextField, MDCTextFieldFoundation,
    MDCTextFieldHelperText, MDCTextFieldHelperTextFoundation,
    MDCTextFieldIcon, MDCTextFieldIconFoundation} from '@material/textfield/index';
import {MDCChipFoundation, MDCChip, MDCChipSetFoundation, MDCChipSet} from '@material/chips/index';

/***************************************************************************************************
 * 
 * Put all the material components we're using in one place for importing into js later on
 * If you modify this file, don't forget to check with the related SASS imports for a component
 * --------------------------------------------------------------------------------------------
 * Import example: import {MDCFoundation, MDCRipple} from './setup/MaterialComponentJS.js';
 * 
 ***************************************************************************************************/


export {
    // MDCFoundation,
    // MDCComponent,
    // ponyfill,
    // transformStyleProperties, getCorrectEventName, getCorrectPropertyName, // Animations
    MDCRipple, // Ripple effect (buttons, etc)
    MDCCheckboxFoundation, MDCCheckbox, // Checkbox JS
    MDCFloatingLabel, MDCFloatingLabelFoundation, // Floating labels for forms
    MDCFormField, MDCFormFieldFoundation, // Form fields
    MDCTextField, MDCTextFieldFoundation,
        MDCTextFieldHelperText, MDCTextFieldHelperTextFoundation,
        MDCTextFieldIcon, MDCTextFieldIconFoundation,
    MDCSnackbarFoundation, // Snackbar notifications
    MDCChipFoundation, MDCChip, MDCChipSetFoundation, MDCChipSet // Chips
}