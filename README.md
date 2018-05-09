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
