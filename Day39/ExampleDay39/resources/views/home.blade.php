{{-- inharit from layout/app --}}
@extends('layouts.app')

{{-- set the title --}}
@section('title', 'HOME')

{{-- set the nav --}}
@section('nav')
    <div class=" flex flex-col  bg-pbl h-40 ">
        <div class="flex justify-around w-screen items-center h-2/5 ">
            <div class="phone flex text-white">
                <div> +1.866.868.6868 </div>
                <div class=" ml-10 ">
                    866.868.6868
                </div>
            </div>
            <div class="links flex text-white">
                <div class="mr-10">AdWords Grade</div>

                <div class="">Login</div>
            </div>
        </div>
        <div class="flex justify-around  p-3 w-screen bg-white h-3/5 ">
            <div class="flex w-1/2 bg-[url('/public/icon.png')] bg-no-repeat bg-contain"></div>
            <div class="flex w-['100%']  items-center text-2xl ">
                <a href="#" class="pl-8">
                    <h2>Products</h2>
                </a>
                <a href="#" class="pl-8">
                    <h2>Agencies</h2>
                </a>
                <a href="#" class="pl-8">
                    <h2>Pricing</h2>
                </a>
                <a href="#" class="pl-8">
                    <h2>Blog</h2>
                </a>
            </div>
        </div>
    </div>
@endsection

{{-- set the content --}}
@section('content')
    <div class="flex flex-1 bg-pbl">
        <div class="flex-1 flex flex-col items-left pl-16 justify-center m-auto text-white bg-pbl h-['100%']">
            <h1 class="text-4xl mb-5 font-semibold">The WordStram Blog</h1>
            <h3 class="text-3xl mb-3">Sign up for tips & tricks to help get most <br> out of online advertising.</h3>
            <div class="flex">
                <input type="text" class="pl-10 pr-40 pt-3 pb-3 rounded-sm" placeholder="Email Address">
                <button class="btn border ml-4 pl-5 pr-5 font-bold rounded-sm ">SIGN ME UP!</button>
            </div>
        </div>
        <div class="flex-1 bg-[url('/public/bgr.png')] bg-no-repeat bg-cover "></div>
    </div>
@endsection

{{-- set the footer --}}
@section('footer')
    <div class="flex flex-col text-[#d5d1d1] flex-1 bg-ftr ">
        <div class="flex h-1/6 bg-pbl w-screen"></div>
        <div class="flex flex-col h-4/6 ">
            <div class="flex h-5/6 p-5">
                <div class="flex w-2/3 justify-around">
                    <div>
                        <table>
                            <tr align="left">
                                <th>
                                    DOOGEE
                                </th>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Teardown</td>
                            </tr>
                            <tr>
                                <td>News</td>
                            </tr>
                            <tr>
                                <td>Partners</td>
                            </tr>
                            <tr>
                                <td>About Us</td>
                            </tr>
                            <tr>
                                <td>Contact Us</td>
                            </tr>
                            <tr>
                                <td>Terms of Use</td>
                            </tr>
                        </table>
                    </div>
                    <div class="">
                        <table>
                            <tr align="left">
                                <th>
                                    Social
                                </th>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                            </tr>
                            <tr>
                                <td>Youtube</td>
                            </tr>
                        </table>
                    </div>
                    <div class="">
                        <table>
                            <tr align="left">
                                <th>
                                    Service
                                </th>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Compare</td>
                            </tr>
                            <tr>
                                <td>Downlaod</td>
                            </tr>
                            <tr>
                                <td>Feedback</td>
                            </tr>
                            <tr>
                                <td>Bug Report</td>
                            </tr>
                        </table>
                    </div>
                    <div class="">
                        <table>
                            <tr align="left">
                                <th>
                                    Activity
                                </th>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Influencers</td>
                            </tr>
                            <tr>
                                <td>Affliated</td>
                            </tr>
                            <tr>
                                <td>Co-Branding</td>
                            </tr>
                            <tr>
                                <td>Honor</td>
                            </tr>
                            <tr>
                                <td>Giveaway</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col w-1/3">
                    <h2 class="text-xl">Newsletter Subscription</h2>
                    <div class="">
                        <input type="text" class="bg-gra pl-10 pr-10 pt-3 pb-3 rounded-sm"
                            placeholder="Subscribe to our newsletter">
                        <button class="btn bg-tas pl-5 pr-5 pt-3 pb-3 font-bold rounded-sm mt-8 ">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center w-screen p-5">
            <p>
                Copyright © 2022 WordStram. All rights reserved.
            </p>
        </div>
    </div>
@endsection
