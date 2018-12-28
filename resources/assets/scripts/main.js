// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

import './components/navigation'
import './components/questions'
import './components/gallery'
import './components/yt-videos'
import './components/additionalInfo'
import './components/mobileExtension'
import './components/optimization'
import './components/maps'

$('.lazy').Lazy({
  effect: 'fadeIn',
  effectTime: 1000,
  threshold: 0,
});
