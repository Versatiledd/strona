jQuery(document).ready(function($) {
  var t1 = new TimelineMax({ paused: true });
  t1.to(".menu", 1.5, {
    top: 0,
    opacity: 1,
    ease: Expo.easeInOut
  })
    .staggerFrom(
      ".main-menu-item",
      1,
      { y: 150, opacity: 0, ease: Expo.easeInOut },
      0.2
    )
    .reverse();
  $(document).on("click", ".menu-btn", function() {
    t1.reversed(!t1.reversed());
  });
  $(document).on("click", ".close-menu", function() {
    t1.reversed(!t1.reversed());
  });
});
