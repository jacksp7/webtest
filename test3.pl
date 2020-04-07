#!/usr/bin/perl
use strict;
use LWP::UserAgent;
use LWP::Protocol::https;
use MIME::Base64;
  
my $hash = "02fa21c2d55897bcebbbea67e54ff4cb
0ae8eb0b8929d214892d3b49c460dff8
3060dd9c93f3ce133d98a6a07dab5b74
8e056221bab96f0289d0aad5f6f05041
e99baa72be16da102dd69fcfb08a8593
d3876a5b89195a3a7fbfa23debe69be2
446837b6581a968c9bb7d98777a24313
3f4ea271c9c63450adda77954335fd47
0ccd903dbc3a5c3a0f93c8820736a583
44f3e17d18dbbcdf7b7c7444fba1a05b
280121e33d3fda057cce7280f6166b3c
da0511b578cc78502366cedf32e1115d
7108313de1247171be2312a9fd66ad8f
6bd7eb09989e295a02c9fe78dae31ca8
0dce43863e484ec7374f74a2f5d5ba11
7c4ea9e0a9af0612a0d30aff6015276f
6dbdd9a6bdf72dbe851ce647cd2f1fb2
748a92920b4593f2c1632a6711fcda0c
be93d31022b1b62fd58f2f52daad6a68
1f87cf95cc2668de1e88d8d5127d9980
88904cb9c9e4ac8c0035e031780c34b2
63edfb011da947aae90d3fe5856dd77b
09e113c68a2a372bc78cef63d598c5b7
c7c88294ce4a7d5a97c4c99e858e65c8
79b04627ccc9904c78b8aff3dfc683da
a4163f42c0a1e40d0b62d795de5bfd9f
8b525c6ecfde4fde240e6d67bb6a4467
7d4226379edeb1dca1f6fc1ca3a14f9e
711b7203b93ed39444d329e419eefd7d
bdde54b2bb644a4de26ee866df92fe2b
";
  
$hash =~ s/\n//g;
  
my $auth = "WHM wh:" . $hash;
  
my $ua = LWP::UserAgent->new(
ssl_opts   => { verify_hostname => 0, SSL_verify_mode => 'SSL_VERIFY_NONE', SSL_use_cert => 0 },
    );
my $request = HTTP::Request->new(GET => "https://s193.web-hosting.com:2087/json-api/listaccts?api.version=1");
$request->header( Authorization => $auth );
my $response = $ua->request($request);
print $response->content;
