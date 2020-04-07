<?php
# Copyright (c) 2009, cPanel, Inc.
# All rights reserved.
#
# Redistribution and use in source and binary forms, with or without modification, are permitted provided
# that the following conditions are met:
#
# * Redistributions of source code must retain the above copyright notice, this list of conditions and the
#   following disclaimer.
# * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the
#   following disclaimer in the documentation and/or other materials provided with the distribution.
# * Neither the name of the cPanel, Inc. nor the names of its contributors may be used to endorse or promote
#   products derived from this software without specific prior written permission.
#
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED
# WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A
# PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
# ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
# TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
# HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
# NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
# POSSIBILITY OF SUCH DAMAGE.

include '../xmlapi.php';

$ip = getenv('127.0.0.1');

# The access has can be found on your server under WHM's "Setup remote access hash" section or at /root/.accesshash
$root_hash = '02fa21c2d55897bcebbbea67e54ff4cb
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
';

$xmlapi = new xmlapi($ip);
$xmlapi->hash_auth("wh",$root_hash);
$xmlapi->return_xml(1);
$xmlapi->set_debug(1);

print $xmlapi->listaccts();
