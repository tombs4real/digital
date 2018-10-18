// Preloader
// Page Loader Vars
var pageLoader = document.querySelector('.page-loader');
var loaderBar = document.querySelector('.loader-bar');
var loaderLogo = document.querySelector('.page-loader > .logo');
var length = loaderBar.getTotalLength();

// Page Loader Event Listener
window.addEventListener('load', function() {
  // Lock Scroll while Page Loads
  lockScroll();
  // New GSAP Timeline
  const pageLoaderAni = new TimelineMax();
  // Timeline Animations
  pageLoaderAni.to(loaderBar, .1, {ease: Power4.easeInOut, opacity:1});
  pageLoaderAni.to(loaderLogo, 2, {ease: Back.easeOut.config(1.7), opacity:1} );
  pageLoaderAni.from(loaderBar, 2, {ease: Power4.easeInOut, strokeDashoffset:length, strokeDasharray:length, onComplete:marqueeAnimations}, '-=2');
  pageLoaderAni.to(pageLoader, 2, {ease: Power4.easeOut, opacity:0, onComplete:removePageLoader});

});
// Remove Page Loader Once Complete
function removePageLoader() {
  pageLoader.remove();
}

function marqueeAnimations() {
  unlockScroll();
  // Home Page Marquee Animations
  var marqueeAni = new TimelineMax();
  var laptop = document.querySelector('.desktop-container');
  var hero = document.querySelector('.desktop-container > .hero');
  var videoWindow = document.querySelector('.desktop-container > .window');
  var videoGlow = document.querySelector('.video-glow');
  var headerLineOne = document.querySelector('h1 > span.line-one');
  var headerLineTwo = document.querySelector('h1 > span.line-two');
  var headerLineThree = document.querySelector('h1 > span.line-three');
  var subHead = document.querySelector('h2.marquee-subhead');
  var projectName = document.querySelector('.desktop-container > .project-name');
  var marqueeButton = document.querySelector('.desktop-container a.marquee-btn');

  marqueeAni.from(laptop, 2, {ease: Power4.easeOut, opacity:0, top:'200px'});
  marqueeAni.from(hero, 2, {ease: Back.easeOut.config(1.7), opacity:0, top:'0px'}, '-=2' );
  marqueeAni.from(videoWindow, 5, {ease: Power4.easeOut, opacity:0} );
  marqueeAni.from(videoGlow, 5, {ease: Power4.easeOut, opacity:0}, '-=5' );
  marqueeAni.from(headerLineOne, 2, {ease: Back.easeOut.config(1.5), opacity:0, top:'100px'}, '-=7' );
  marqueeAni.from(headerLineTwo, 2, {ease: Back.easeOut.config(1.5), opacity:0, top:'100px'}, '-=6.8' );
  marqueeAni.from(headerLineThree, 2, {ease: Back.easeOut.config(1.5), opacity:0, top:'100px'}, '-=6.5' );
  marqueeAni.from(subHead, 2, {ease: Back.easeOut.config(1.5), opacity:0, left:'-10px'}, '-=6.0' );
  marqueeAni.from(projectName, 2, {ease: Back.easeOut.config(1.5), opacity:0}, '-=6.0' );
  marqueeAni.from(marqueeButton, 2, {ease: Back.easeOut.config(1.5), opacity:0}, '-=5.5' );
  // End Home Page Marquee Animations

};




function onYouTubeIframeAPIReady() {
  // Youtube Video API
  var vidPlayer;
  var video_target = document.getElementById('desktop_preview_vid');
  var glow_target = document.getElementById('desktop_preview_glow');
  var video_id = video_target.getAttribute('data-video-id');

 // Desktop Preview Video
 vidPlayer = new YT.Player(video_target, {
   videoId: video_id,
   playerVars: {
     'autoplay': 1,
     'mute': 1,
     'controls': 0,
     'showinfo': 0,
     'modestbranding': 1,
     'rel': 0,
     'fs': 0,
     'cc_load_policy': 0,
     'iv_load_policy': 3,
     'autohide': 0,
     'playlist' : video_id,
     'loop': 1,
     'start': 1786
   },
   events: {
     'onReady': onPlayerReady
   }
 });
 // Desktop Preview Video Glow Background
 vidPlayer = new YT.Player(glow_target, {
   videoId: video_id,
   playerVars: {
     'autoplay': 1,
     'mute': 1,
     'controls': 0,
     'showinfo': 0,
     'modestbranding': 1,
     'rel': 0,
     'fs': 0,
     'cc_load_policy': 0,
     'iv_load_policy': 3,
     'autohide': 0,
     'playlist' : video_id,
     'loop': 1,
     'start': 1786
   },
   events: {
     'onReady': onPlayerReady
   }
 });
}

function onPlayerReady(event) {
  event.target.playVideo();
}


// Lock Scroll
function lockScroll() {
  document.body.style.overflowY = "hidden";
}
// Unlock Scroll
function unlockScroll() {
  document.body.style.overflowY = "scroll";
}
