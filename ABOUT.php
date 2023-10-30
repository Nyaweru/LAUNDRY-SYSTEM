<!DOCTYPE html>
<html>
    <head>
    
    <title>STEGAM LAUNDRY SERVICES </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    </head>
    <body>


        <div class="topnav">
          <style>
            sub {
              font-size: x-small;
              font: optional;
              color: #f41932; /* Adjust the value to change the font size */
                          }
                          .topnav{
                          margin top: 0px;
                            
  background-color: white;
  height: 160px;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: baseline;  
  position: relative;
  width::-ms-expand;
        }
          </style>
    
            <h>STEGAM LAUNDRY SERVICES</h>
            <a href="index.php" class="blink-button">HOME</a>
            <a href="BOOK.php" class="blink-button">BOOK</a>
          
            <a href="BILLING.php" class="blink-button">BILLING</a>
            
            <img src ="https://www.bing.com/th?id=OIP.K60qBH8x9SBqu05bmKibOwHaIv&pid=3.1&cb=&w=300&h=300&p=0" width="90px" height="90px"></img>

            <a href="REVIEW.php" class="blink-button">REVIEW</a>
  <div class="container6">
        <h8>STEGAM LAUNDRY SERVICES</h8>

        <div class="tip">
    
            <h2>1. Use Clear Navigation Menus</h2>
            <p>Ensure your website has clear and organized navigation menus. Use HTML to structure your menus, CSS for styling, and JavaScript for interactivity. This makes it easy for users to find what they're looking for.</p>
        </div>

        <div class="tip">
            <h2>2. Implement a Search Feature</h2>
            <p>Include a search bar on your website using HTML input elements. Style it with CSS to make it easily noticeable, and use JavaScript to add real-time search functionality. This helps users quickly locate specific content.</p>
        </div>

        <div class="tip">
            <h2>3. Create User-Friendly Links</h2>
            <p>When creating links, make them descriptive and user-friendly. Use HTML anchor tags with appropriate text. Apply CSS styles to differentiate links from regular text. JavaScript can be used to enhance link behavior, such as opening links in new tabs when needed.</p>
        </div>
    </div>
<style>
  @keyframes slide-in {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }
        .container6 {
            width: 50%;
            max-width: 300px;
          margin-top: 30px;

            padding: 20px;
            height: 160px;
            left: 65%;
            background-color:white ;
            color:navy ;
            animation: slide-in 2s ease;
            overflow-x: hidden;
            position: fixed;
        }
        h8 {
            color: black;
        }
        .tip {
            border: 2px solid #333;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .tip h2 {
          color: blue;
        }
        .tip p {
            color: #666;
        }
    </style>
          </div>
          <div class="bottomnav">
            <style>
              .bottomnav{
                height: min-content;
                background-color: whitesmoke;
                color:black;
                align-items: left;
                                position: relative;
              }
              </style>
              <div>
<div class="search-container">
  <form>
    <input type="text" placeholder="Search anything...">
    <button type="submit">Search</button>
  </form>
</div>
             <script>
              document.addEventListener('DOMContentLoaded', () => {
             const searchForm = document.querySelector('.search-container form');
const aboutPara = document.querySelector('#about');

searchForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const searchTerm = searchForm.querySelector('input').value;
  const aboutText = aboutPara.textContent;
  if (aboutText.includes(searchTerm)) {
    const regex = new RegExp(searchTerm, 'g');
    aboutPara.innerHTML = aboutText.replace(regex, `<mark>${searchTerm}</mark>`);
  } else {
    console.log('not found');
  }
});
              });
             </script>  
          </div>
            
<br>
<p id="about">
            Our mission is to make laundry day as easy and stress-free as possible for our customers. We offer a wide range of services, including wash and fold, ironing, dry cleaning, carpet cleaning, house cleaning and alterations, all at affordable prices.

                Our team of experienced professionals takes great care in handling your garments, using only the best detergents and equipment to ensure that your clothes come back to you clean, fresh, and looking their best. Our top of the range machines ensure timeliness with less than 24 hours to get the job done, meaning if you are in a hurry, we got you.
                we are flexible and always on the clock, because you never know when an emergency will strike. But when it does, we will be there to provide a solution.

You want good business, we are in the business of making you look good so that you can really show your true colors!. We are located in Nairobi, Kisumu, Mombasa, Nakuru, Eldoret, Baringo and Naivasha.
                We are committed to providing excellent customer service and strive to exceed your expectations every time you visit us.Thank you for choosing our laundry service  we look forward to serving you! 
               <br>
                <p2>Our rates are as follows</p2>
                <table>
                    <tr>
                      <th>Service</th>
                      <th>Price</th>
                    </tr>
                    <tr>
                      <td>Wash and fold</td>
                      <td>ksh 100 per item</td>
                    </tr>
                    <tr>
                      <td>Ironing</td>
                      <td>ksh 50 per item</td>
                    </tr>
                    <tr>
                      <td>Dry cleaning</td>
                      <td>ksh 200 per item</td>
                    </tr>
                    <tr>
                        <td>Carpet cleaning</td>
                        <td>ksh 800 per item</td>
                    </tr>
                    <tr>
                        <td>House cleaning</td>
                        <td>Price vary by size</td>
                    </tr>
                    <tr>
                      <td>Curtains</td>
                      <td>ksh 100 per 2m</td>
                    </tr>
                    <tr>
                      <td>Normal blankets</td>
                      <td>200 per item</td>
                    </tr>
                    <tr>
                      <td>Duvets</td>
                      <td>250 per item</td>
            </tr>
            <tr>
              <td>Bedding package</td>
              <td>800 per set</td>
            </tr>
                    <tr>
                      <td>Alterations</td>
                      <td>Prices vary by service</td>
                    </tr>
                    
                  </table>
          </div>
        
</div>
            </body>
            </html>
            