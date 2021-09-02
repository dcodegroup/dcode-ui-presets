@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
'heading' => "Typography",
'devReady' => false,
])

<div class="content">
    <h3>About Headings</h3>
    <p>The usage of header tags is similar to how a table of contents for a non-fiction book is written:</p>
    <ul>
        <li>The H1 introduces the topic your page is about, similar to a books title. H1 tags should always come before other heading tags and there should only ever be one H1 per page.</li>
        <li>H2s are akin to book chapters, describing the main topics you’ll cover in sections of an article.</li>
        <li>Subsequent headers such as H3s to H6s serve as additional sub-headings within each section simliar to how a book chapter may be split up by sub-topics.</li>
    </ul>
    <div class="demo">
        <h1>h1. This is a very large header.</h1>
        <h2>h2. This is a large header.</h2>
        <h3>h3. This is a medium header.</h3>
        <h4>h4. This is a moderate header.</h4>
        <h5>h5. This is a small header.</h5>
        <h6>h6. This is a tiny header.</h6>
        <p>p. This is paragraph text.</p>
        <small>small. This is tiny text.</small>
    </div>
    <hr>
    <h3>Font Colour Helpers</h3>
    <p>Colour settings can be applied to any text element using the <code>.text-COLOR</code> css class. All the colours set in the pallete map are available colour options.</p>
    <div class="demo">
        <h1 class="text-primary">h1.text-primary</h1>
        <h2 class="text-secondary">h2.text-secondary</h2>
        <h3 class="text-success">h3.text-success</h3>
        <h4 class="text-warning">h4.text-warning</h4>
        <h5 class="text-danger">h5.text-danger</h5>
        <h6 class="text-medium-gray">h6.text-medium-gray</h6>
        <p class="text-dark-gray">p.text-dark-gray</p>
        <p class="text-light-gray bg-black">h6.text-light-gray</p>
        <small class="text-black">small.text-black</small>
     </div>
</div>
@endsection

{{-- Other features to consider including: https://www.lightningdesignsystem.com/utilities/text/--}}