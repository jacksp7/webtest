#!/usr/bin/perl
#view domaindata for domain using WHM/cPanel xml-api.
use strict;
use LWP::UserAgent;
use XML::Simple;
use Data::Dumper;

my $num_args = $#ARGV + 1;
if ($num_args != 1) {
    print "\nUsage: $0 <domain.com>\n";
    exit;
}
my $accesshash = `cat /tmp/a/.accesshash`;

$accesshash =~ s/\n//g;
my $auth = "WHM wh:" . $accesshash;

my $domain = $ARGV[0];
my $ua = LWP::UserAgent->new;
my $request = HTTP::Request->new( GET => "http://127.0.0.1:2086/xml-api/domainuserdata?domain=$domain" );
$request->header( Authorization => $auth );
my $response = $ua->request($request);
my $xml_string = $response->content;
my $xml_hashref = XMLin($xml_string);
print "$response\n$xml_string\n$xml_hashref\n";
