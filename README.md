# michaels-pwp
This project will help me define the direction of my Personal website.

### Milestone 1 Feedback
Your Purpose, Audience, Goal and Persona are thoughtfully defined and you have a solid direction laid out for your work ahead - nice job.

Your project is set up correctly, and overall your code looks pretty good, but there were a couple of errors. Have a look at Edits &amp; Suggestions below. You're ready to begin work on Milestone 2a, and I look forward to seeing your design and content ideas take shape!

Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) (Submitted late, within one day of due date/time).

#### Edits &amp; Suggestions
- You're missing the `<head>` tag. That should contain both the `<title>` and `<meta>` tags. See: https://bootcamp-coders.cnm.edu/class-materials/html/
- Super tiny detail - line 2 of your .gitignore needs to be `.DS_Store` (the dot is missing)
- Lines 20-25: These don't all need to be `<ul>`s. Ideally they should all be `<li>`s inside one `<ul>`... like so:
```
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
```
### Milestone 2a Feedback
The wireframes you have are a good start - but remember that PWP is **one page only**, and what you have here is for a multi-page site. Consequently, the wireframes are incomplete - please show all the content that will live on one page - this includes your portfolio, resume, and contact form.

Your Content Strategy should be written section-by-section like in the [Milestone 2a Instructions](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/)
and [Sample Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/). Please take a look at these for an example of our expectations.

This is close, and you've got a good start here - but it's just not enough to provide you with a guide for your development. We really need to see these other sections wireframed before you can start building your site. Keep it simple. 

Unfortunately because this project is incomplete, it only qualifies for [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) at this time. Please do corrections and turn them in by 8:00am Wed 5/9 and I'll bump your grade to [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
- Path to your image should have been `../../images/wireframe.png`. I was able to view it on GitHub - but best to fix it.

### Updated Milestone 2a Feedback
Nice work on updating the wireframes and content strategy - this will provide you with a much clearer guide for your development ahead. Keeping things simple is a good approach here - and with the addition of some color and a clean, consistent layout - you could create a  slick and professional page here.

There are some big differences in the header on mobile vs. desktop. You'll need to use `@media` queries and/or Bootstrap classes to show and hide elements based on screen size. Experiment with this, and don't hesitate to simplify things if you need to. There are a couple of errors with your HTML - see Edits &amp; Suggestions below for more details. You need to practice HTML, Bootstrap, and CSS a bit more - especially  before diving into PWP - so I recommend giving some the challenges a second round.

Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are now clear to begin development on your PWP. Don't hesitate to reach out for help if you need to.

**We'll be building PWP in a file named index.php inside of /public_html**. Please note that no frontend-facing site files should live outside of the /public_html directory. Remember use an organized and standards-compliant directory structure to house all images, JavaScript, CSS, etc. We are done with the /documentation directory for now!

#### Edits &amp; Suggestions
- Opening and closing `<head>` tag is missing
- Always use the `alt` attribute on your `<img>` tags.

### Milestone 2b Feedback
Still got a lot of work ahead - so keep moving forward. Your Milestone 2b passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Notes and feedback left via Slack.

### PWP Final Feedback
Nice work for a first website - I can see that this project was challenge. Keep practicing and keep challenging yourself. The more projects you do, the easier and more fun web development will become.

*Code Base*: There are errors in your HTML. These can be found by using https://validator.w3.org.
- The `!DOCTYPE` is missing `html`
- There are 2 `<body>` tags... this isn't right. There should only be one.
- `.sfooter` and `.sfooter-content` are not being used properly here, and may even be causing problems - these classes and CSS have been copy/pasted from one of my examples I think... I can even see the CSS docblock from my form demo in there. This is not good copy/paste.
- jQuery Form, Validate, and Additional Methods dependencies are being loaded twice (lines 24-27)
- Remove commented out code (dead code) - it's sloppy.
- Always use `alt` attributes on your `<img>`s
- Lines 53-68 need to be redone. `<a>` tags cannot be direct children of a `<ul>`. They must be placed inside `<li>`s first.

From what I see here, it looks like you copy pasted some things in an effort to get them to work. I challenge you to keep practicing and learn to code everything yourself from scratch in the future.

*Git Commits*: You definitely improved your Git/GitHub workflow as time progressed. Nice work.

*Mobile-First Responsiveness*: I've tested your page using devtools, Chrome on Linux, and Chrome & Firefox on Android. Your layout does respond in an acceptable manner across these platforms.

*Design, Content, &amp; Overall Presentation*: There is plenty of room to keep practicing here - but this is a good start for a first web page. There is a horizontal navbar across the bottom of the browser on desktop - and this is generally caused by problems with the HTML and Bootstrap grid. Cleaning up the HTML would be a help. I would also consider formatting your images in a different way on mobile - perhaps a grid of 4? Otherwise nice work experimenting with style - keep it up!

*Contact Form*: This appears to work fine from my end - did you receive my test message?

Your PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your cumulative PWP score including all Milestones is 20/40 points (50%). Because of the way the rubric is set up - 20/40 is considered passing with a "C" grade.

- Milestone 1 - 20%: Tier II 20(0.2) = 4
- Milestone 2a - 20%: Tier II 20(0.2) = 4
- Milestone 2b - 10%: Tier II 20(0.1) = 2
- Milestone 3 - 50%: Tier II 20(0.5) = 10

#### Suggestions
- We didn't discuss favicons, but you might want to consider adding one. Have a look at this tool which helps render multiple versions for cross-platform  support: https://realfavicongenerator.net/
