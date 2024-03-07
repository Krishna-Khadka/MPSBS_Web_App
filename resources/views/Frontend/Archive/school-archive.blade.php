@extends('Frontend.layout.school-master')
@section('body-content')
    <section id="notice-banner" style="background: url({{ asset('frontend/assets/images/bannerBg.jpg') }});">
        <div class="container">
            <div class="notice-banner-content d-flex align-items-center">
                <div class="notice-banner-left">
                    <h1>Find News and Events happening in Modern Preparatory School</h1>
                    <p>Islington College thrives on providing quality
                        education to its students by just not with the
                        industry expert lecturers but also with extra
                        curricular activities. </p>
                </div>
                <div class="notice-banner-right d-none d-md-block">
                    <img src="{{ asset('frontend/assets/images/event.png') }}" class="img-fluid" alt>
                </div>
            </div>
        </div>
    </section>

    <!--********************** archieve-banner section ends **********************-->

    <!-- ********************** archieve section starts ***************************** -->
    {{-- {{ $archive }} --}}
    <section id="archieve">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <colgroup>
                                <col style="width: 10%" />
                                <col style="width: 20%" />
                                <col style="width: 30%" />
                                <!-- Set the width for the "description" column -->
                                <col style="width: 20%" />
                                <col style="width: 20%" />
                            </colgroup>
                            <thead>
                                <tr class="table-primary text-capitalize">
                                    <th scope="col">Posted At</th>
                                    <th scope="col">title</th>
                                    <th scope="col">description</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Archive Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($archive as $arch)
                                    <tr>
                                        {{-- {{ $arch->images }} --}}
                                        <th scope="row">{{ \Carbon\Carbon::parse($arch->created_at)->format('F j Y') }}
                                        </th>
                                        <td class="custom-padding"><a
                                                href="{{ route('site.archive.deltails', $arch->slug) }}">{{ $arch->title }}</a>
                                        </td>
                                        <td class="custom-padding">{{ Str::limit($arch->description, 30, '...') }}
                                        </td>
                                        <td class="custom-padding">{{ $arch->category }}</td>
                                        <td class="custom-padding">{{ \Carbon\Carbon::parse($arch->date)->format('Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
