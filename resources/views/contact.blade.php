@extends('layouts.app')

@section('title', 'Contact')

@section('content')
        <section id="page-header-2">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE, We love to hear from you!</p>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="details">
               <span>GET IN TOUCH</span>
               <h2>Visit our Center or contact us today</h2>
               <h3>Head Office</h3> 
               <div>
                    <li>
                        <i class="fa-regular fa-map"></i>
                        <p>Airport Road - Borj El Brajne Street facing Cafee77</p>
                    </li>
                    <li>
                        <i class="fa-regular fa-envelope"></i>
                        <p>amleyeh_heypermarket@contact.org</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p>+961 01454021</p>
                    </li>
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <p>Monday to Sunday 9:00am to 8:00pm</p>
                    </li>
               </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1656.7808488851667!2d35.4966856!3d33.8494123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f19e132e6536d%3A0x52e08b500d2ae77a!2sAl%20Amlieh%20SuperMarket!5e0!3m2!1sen!2slb!4v1747153614179!5m2!1sen!2slb"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form-details" class="section-p1">
            <form action="{{ route('contact.message') }}" method="POST">
                @csrf

                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input id="name" name="name" type="text" placeholder="Your Name" required>
                <input id="email" name="email" type="email" placeholder="Your Email" required>
                <input id="suject" name="subject" type="text" placeholder="Subject" required>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..." required></textarea>
                
                <button type="submit" onclick="showMessageSubmitConfirm()">Submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="{{ asset('img/people/john.jpg') }}" alt="john_img">
                    <p><span>John David</span>Senior Marketing Manager 
                        <br> Phone: +961037865767
                        <br> Email: john@gmail.com
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/people/david.jpg') }}" alt="david_img">
                    <p><span>David Alami</span>Senior Marketing Manager 
                        <br> Phone: +961345678922
                        <br> Email: david@gmail.com
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/people/hassan.jpg') }}" alt="hassan_img">
                    <p><span>Hasan Ghosein</span>Senior Marketing Manager 
                        <br> Phone: +961715675684
                        <br> Email: hasan@gmail.com
                    </p>
                </div>
             </div>
        </section>
@endsection