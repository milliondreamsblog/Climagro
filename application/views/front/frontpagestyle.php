<style>
    .hero-img {
        width: 100%;
        height: 75%;
        background-size: cover;
        background-position: center;
        
        position: absolute;
        top: 0;
        left: 0;
        
    }
    /* More styles */

      /* Fix for extra space on right */
    body, html {
        overflow-x: hidden; /* Prevents horizontal scrolling */
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        max-width: 1200px; /* Or whatever max-width you're using */
        padding-left: 15px;
        padding-right: 15px;
        margin: 0 auto;
        
    }

    .container-video{
        padding-top : 20px;
        margin-top: 20px;
    }

    .hero-dashbord img {
        max-width: 100%; /* Ensures image doesn't overflow */
        height: auto;
    }

    /* Add margin bottom to the section instead of using the mb-160 class */
    .hero-two {
        margin-bottom:  0px; /* Adjust as needed, was mb-160 before */
    }

    /* Ensure SVG elements don't create overflow */
    svg {
        display: inline-block;
        vertical-align: middle;
    }





    /*video text */
    .climate-content {
    text-align: left;
    padding: 80px 20px;
    color: #1f2937; /* slate-800 tone for readability */
    max-width: 800px;
    margin: 0 auto;
    }

    .climate-content h4 {
    font-size: 1.5rem;
    color: #4f46e5; /* Indigo-600 */
    margin-bottom: 10px;
    font-weight: 600;
    }

    .climate-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin: 5px 0;
    color: #111827; /* Gray-900 */
    }

    .climate-content p {
    font-size: 1.125rem;
    margin-top: 20px;
    color: #4b5563; /* Gray-600 */
    line-height: 1.6;
    }

    .climate-content .btn-primary {
    background-color: #10b981; /* Emerald-500 */
    border: none;
    color: white;
    padding: 12px 30px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 8px;
    transition: background-color 0.3s ease;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
    }

    .climate-content .btn-primary:hover {
    background-color: #059669; /* Emerald-600 */
    text-decoration: none;
    }

</style>