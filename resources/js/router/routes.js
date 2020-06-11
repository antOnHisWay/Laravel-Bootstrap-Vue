import Layout from '../layout/Layout'

import Alert          from '../components/Alert.vue'
import Aspect         from '../components/Aspect.vue'
import Badge          from '../components/Badge.vue'
import Breadcrumb     from '../components/Breadcrumb.vue'
import Button         from '../components/Button.vue'
import ButtonGroup    from '../components/ButtonGroup.vue'
import ButtonToolbar  from '../components/ButtonToolbar.vue'
import Calendar       from '../components/Calendar.vue'
import Card           from '../components/Card.vue'
import Carousel       from '../components/Carousel.vue'
import Collapse       from '../components/Collapse.vue'
import Dropdown       from '../components/Dropdown.vue'
import Embed          from '../components/Embed.vue'
import Form           from '../components/Form.vue'
import FormCheckbox   from '../components/FormCheckbox.vue'
import FormDatepicker from '../components/FormDatepicker.vue'
import FormFile       from '../components/FormFile.vue'
import FormGroup      from '../components/FormGroup.vue'
import FormInput      from '../components/FormInput.vue'
import FormRadio      from '../components/FormRadio.vue'
import FormRating     from '../components/FormRating.vue'
import FormSelect     from '../components/FormSelect.vue'
import FormSpinbutton from '../components/FormSpinbutton.vue'
import FormTags       from '../components/FormTags.vue'
import FormTextarea   from '../components/FormTextarea.vue'
import FormTimepicker from '../components/FormTimepicker.vue'
import Image          from '../components/Image.vue'
import InputButton    from '../components/InputButton.vue'
import Jumbotron      from '../components/Jumbotron.vue'
import Link           from '../components/Link.vue'
import ListGroup      from '../components/ListGroup.vue'
import Media          from '../components/Media.vue'
import Modal          from '../components/Modal.vue'
import Nav            from '../components/Nav.vue'
import NavBar         from '../components/NavBar.vue'
import Overlay        from '../components/Overlay.vue'
import Pagination     from '../components/Pagination.vue'
import PaginationNav  from '../components/PaginationNav.vue'
import Popover        from '../components/Popover.vue'
import Progress       from '../components/Progress.vue'
import Sidebar        from '../components/Sidebar.vue'
import Spinner        from '../components/Spinner.vue'
import Table          from '../components/Table.vue'
import Tabs           from '../components/Tabs.vue'
import Time           from '../components/Time.vue'
import Toasts         from '../components/Toasts.vue'
import Tooltip        from '../components/Tooltip.vue'

import Hover                   from '../directives/Hover.vue'
import DirectivePopover        from '../directives/Popover.vue'
import Scrollspy               from '../directives/Scrollspy.vue'
import Toggle                  from '../directives/Toggle.vue'
import DirectiveTooltip        from '../directives/Tooltip.vue'
import Visible                 from '../directives/Visible.vue'

const routes = [
  {
    path: '*',
    redirect: '/front/components/alert'
  },
  {
    path: '/front/components',
    name: 'Layout',
    component: Layout,
    children: [
      {
        path: 'alert',
        component: Alert
      },
      {
        path: 'aspect',
        component: Aspect
      },
      {
        path: 'badge',
        component: Badge
      },
      {
        path: 'breadcrumb',
        component: Breadcrumb
      },
      {
        path: 'button',
        component: Button
      },
      {
        path: 'buttonGroup',
        component: ButtonGroup
      },
      {
        path: 'buttonToolbar',
        component: ButtonToolbar
      },
      {
        path: 'calendar',
        component: Calendar
      },
      {
        path: 'card',
        component: Card
      },
      {
        path: 'carousel',
        component: Carousel
      },
      {
        path: 'collapse',
        component: Collapse
      },
      {
        path: 'dropdown',
        component: Dropdown
      },
      {
        path: 'embed',
        component: Embed
      },
      {
        path: 'form',
        component: Form
      },
      {
        path: 'FormCheckbox',
        component: FormCheckbox
      },
      {
        path: 'FormDatepicker',
        component: FormDatepicker
      },
      {
        path: 'FormFile',
        component: FormFile
      },
      {
        path: 'FormGroup',
        component: FormGroup
      },
      {
        path: 'FormInput',
        component: FormInput
      },
      {
        path: 'FormRadio',
        component: FormRadio
      },
      {
        path: 'FormRating',
        component: FormRating
      },
      {
        path: 'FormSelect',
        component: FormSelect
      },
      {
        path: 'FormSpinbutton',
        component: FormSpinbutton
      },
      {
        path: 'FormTags',
        component: FormTags
      },
      {
        path: 'FormTextarea',
        component: FormTextarea
      },
      {
        path: 'FormTimepicker',
        component: FormTimepicker
      },
      {
        path: 'Image',
        component: Image
      },
      {
        path: 'InputButton',
        component: InputButton
      },
      {
        path: 'Jumbotron',
        component: Jumbotron
      },
      {
        path: 'Link',
        component: Link
      },
      {
        path: 'ListGroup',
        component: ListGroup
      },
      {
        path: 'Media',
        component: Media
      },
      {
        path: 'Modal',
        component: Modal
      },
      {
        path: 'Nav',
        component: Nav
      },
      {
        path: 'NavBar',
        component: NavBar
      },
      {
        path: 'Overlay',
        component: Overlay
      },
      {
        path: 'Pagination',
        component: Pagination
      },
      {
        path: 'PaginationNav',
        component: PaginationNav
      },
      {
        path: 'Popover',
        component: Popover
      },
      {
        path: 'Progress',
        component: Progress
      },
      {
        path: 'Sidebar',
        component: Sidebar
      },
      {
        path: 'Spinner',
        component: Spinner
      },
      {
        path: 'Table',
        component: Table
      },
      {
        path: 'Tabs',
        component: Tabs
      },
      {
        path: 'Time',
        component: Time
      },
      {
        path: 'Toasts',
        component: Toasts
      },
      {
        path: 'Tooltip',
        component: Tooltip
      }
    ]
  },
  {
    path: '/front/directives',
    name: 'Layout',
    component: Layout,
    children: [
      {
        path: 'hover',
        component: Hover
      },
      {
        path: 'popover',
        component: DirectivePopover
      },
      {
        path: 'scrollspy',
        component: Scrollspy
      },
      {
        path: 'toggle',
        component: Toggle
      },
      {
        path: 'tooltip',
        component: DirectiveTooltip
      },
      {
        path: 'visible',
        component: Visible
      },
    ]
  },
]

export default routes
