@extends('layouts.app')
@section('content')
    <main>

        <div class="slider-area gray-bg position-relative">
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-caption hero-caption2">
                                <h2>Browse Jobs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="job_listing_area section-bg2 plus_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="job_filter white-bg">
                            <div class="form_inner white-bg">
                                <h3>Filter</h3>
                                <form action="{{ url('/job/search') }}" method="get">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <input type="text" placeholder="Search keyword" name="keyword"
                                                    value="{{ request()->input('keyword', old('keyword')) }}">



                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="single_field">


                                                <input type="text" placeholder="location" name="location"
                                                    value="{{ request()->input('location', old('location')) }}">

                                                {{-- <select class="wide">
                                                    <option data-display="Location">Location</option>
                                                    <option value="1">Rangpur</option>
                                                    <option value="2">Dhaka </option>
                                                    <option value="3">Kathmandu</option>
                                                </select> --}}


                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <select class="wide" name="category">
                                                    <option value="" data-display="Category">Category
                                                    </option>
                                                    <option value="IT">IT</option>
                                                    <option value="NonIT">Non IT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <input type="text" placeholder="experiance" name="experiance">
                                                {{-- <select class="wide">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">Experience 1</option>
                                                    <option value="2">Experience 2 </option>
                                                </select> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <select class="wide" name="type">
                                                    <option value="" data-display="Job type">Job type</option>
                                                    <option value="Part Time">Part Time </option>
                                                    <option value="Full Time">Full Time </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <select class="wide" name="qualification">
                                                    <option value="" data-display="Qualification">Qualification
                                                    </option>
                                                    <option value="Master Degree">Master Degree</option>
                                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                                    <option value="Diploma or +2">Diploma or +2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <select class="wide" name="gender">
                                                    <option value="" data-display="Gender" >Gender</option>
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single_field">
                                                <div class="reset_btn">
                                                    <button class="boxed-btn3 w-100" type="submit">submit</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- <div class="reset_btn">
                                <button class="boxed-btn3 w-100" type="submit">Reset</button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="recent_joblist_wrap">
                            <div class="recent_joblist white-bg ">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h4>Job Listing</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="serch_cat d-flex justify-content-end">
                                            <select>
                                                <option data-display="Most Recent">Most Recent</option>
                                                <option value="1">Marketer</option>
                                                <option value="2">Wordpress </option>
                                                <option value="4">Designer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job_lists m-0">
                            <div class="row">
                                @foreach ($jobs as $job)
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single_jobs white-bg d-flex justify-content-between">
                                            <div class="jobs_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets') }}/img/icon/{{ $job->id }}.svg"
                                                        alt="">
                                                </div>
                                                <div class="jobs_conetent">
                                                    <a href="{{ url('/job/detail', $job->id) }}">
                                                        <h4>{{ $job->title }}</h4>
                                                    </a>
                                                    <div class="links_locat d-flex align-items-center">
                                                        <div class="location">
                                                            <p> <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                                                            </p>
                                                        </div>
                                                        <div class="location">
                                                            <p> <i class="far fa-clock"></i> {{ $job->type }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jobs_right">
                                                <div class="apply_now">
                                                    <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                    <a href="{{ url('/job/detail', $job->id) }}" class="boxed-btn3">Apply
                                                        Now</a>
                                                </div>
                                                <div class="date">
                                                    <p>{{ $job->created_at->format('D ,M Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('assets') }}/img/icon/2.svg" alt="">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="{{ url('/job/detail') }}">
                                                    <h4>Digital Marketer</h4>
                                                </a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fas fa-map-marker-alt"></i> California, USA</p>
                                                    </div>
                                                    <div class="location">
                                                        <p> <i class="far fa-clock"></i> Part-time</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a href="{{ url('/job/detail') }}" class="boxed-btn3">Apply Now</a>
                                            </div>
                                            <div class="date">
                                                <p>Date line: 31 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('assets') }}/img/icon/3.svg" alt="">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="{{ url('/job/detail') }}">
                                                    <h4>Wordpress Developer</h4>
                                                </a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fas fa-map-marker-alt"></i> California, USA</p>
                                                    </div>
                                                    <div class="location">
                                                        <p> <i class="far fa-clock"></i> Part-time</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a href="{{ url('/job/detail') }}" class="boxed-btn3">Apply Now</a>
                                            </div>
                                            <div class="date">
                                                <p>Date line: 31 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('assets') }}/img/icon/4.svg" alt="">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="{{ url('/job/detail') }}">
                                                    <h4>Visual Designer</h4>
                                                </a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fas fa-map-marker-alt"></i> California, USA</p>
                                                    </div>
                                                    <div class="location">
                                                        <p> <i class="far fa-clock"></i> Part-time</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a href="{{ url('/job/detail') }}" class="boxed-btn3">Apply Now</a>
                                            </div>
                                            <div class="date">
                                                <p>Date line: 31 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('assets') }}/img/icon/5.svg" alt="">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="{{ url('/job/detail') }}">
                                                    <h4>Software Engineer</h4>
                                                </a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fas fa-map-marker-alt"></i> California, USA</p>
                                                    </div>
                                                    <div class="location">
                                                        <p> <i class="far fa-clock"></i> Part-time</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a href="{{ url('/job/detail') }}" class="boxed-btn3">Apply Now</a>
                                            </div>
                                            <div class="date">
                                                <p>Date line: 31 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('assets') }}/img/icon/1.svg" alt="">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="{{ url('/job/detail') }}">
                                                    <h4>Creative Designer</h4>
                                                </a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fas fa-map-marker-alt"></i> California, USA</p>
                                                    </div>
                                                    <div class="location">
                                                        <p> <i class="far fa-clock"></i> Part-time</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                                <a href="{{ url('/job/detail') }}" class="boxed-btn3">Apply Now</a>
                                            </div>
                                            <div class="date">
                                                <p>Date line: 31 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination_wrap">
                                        <ul>
                                            <li><a href="#"> <i class="ti-angle-left"></i> </a></li>
                                            <li><a href="#"><span>01</span></a></li>
                                            <li><a href="#"><span>02</span></a></li>
                                            <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </main>
@endsection
