<li class="{{ Request::is('banners*') ? 'active' : '' }}">
    <a href="{!! route('admin.banners.index') !!}"><i class="fa fa-edit"></i><span>Banners</span></a>
</li>

<li class="{{ Request::is('labels*') ? 'active' : '' }}">
    <a href="{!! route('admin.labels.index') !!}"><i class="fa fa-edit"></i><span>Labels</span></a>
</li>

<li class="{{ Request::is('videos*') ? 'active' : '' }}">
    <a href="{!! route('admin.videos.index') !!}"><i class="fa fa-edit"></i><span>Videos</span></a>
</li>

<li class="{{ Request::is('offers*') ? 'active' : '' }}">
    <a href="{!! route('admin.offers.index') !!}"><i class="fa fa-edit"></i><span>Offers</span></a>
</li>

<li class="{{ Request::is('languages*') ? 'active' : '' }}">
    <a href="{!! route('admin.languages.index') !!}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('admin.services.index') !!}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('admin.projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('projectImages*') ? 'active' : '' }}">
    <a href="{!! route('admin.projectImages.index') !!}"><i class="fa fa-edit"></i><span>Project Images</span></a>
</li>

 

<li class="{{ Request::is('socialMedia*') ? 'active' : '' }}">
    <a href="{!! route('admin.socialMedia.index') !!}"><i class="fa fa-edit"></i><span>Social Media</span></a>
</li>

