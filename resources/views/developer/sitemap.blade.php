<pre>&lt;?xml version="1.0" encoding="UTF-8"?&gt;

&lt;urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"&gt;

@foreach($articles as $article)

&nbsp;&nbsp;&nbsp;&lt;url&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;loc&gt;https://www.superiorspanishschool.com/{{ $article->alias }}&lt;/loc&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;lastmod&gt;{{ $article->updated_at }}&lt;/lastmod&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;changefreq&gt;monthly&lt;/changefreq&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;priority&gt;0.8&lt;/priority&gt;

&nbsp;&nbsp;&nbsp;&lt;/url&gt;

@endforeach


&lt;/urlset&gt;</pre>