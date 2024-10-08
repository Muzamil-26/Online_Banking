var t1=gsap.timeline();

t1.from(".navigation a,.anchor,.btn a",{
    opacity:0,
    y:-10,
    // stagger:0.2,
    duration:0.1,
    delay:0.2

})
t1.from(".aboutheading-section-big h1",{
    opacity:0,
    y:10,
    duration:0.3,

})
t1.from(".left-about",{
    x:-10,
    opacity:0,
    // duration:1,

},"Aboutanime")
t1.from(".right-about",{
    x:10,
    opacity:0,
    // duration:1,
},"Aboutanime")