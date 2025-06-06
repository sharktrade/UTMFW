COMMENT =		highly flexible sniffer/NIDS

DISTNAME =		snort-2.9.20
REVISION =		4
RULESV =		29200

CATEGORIES =		net security

HOMEPAGE =		https://www.snort.org/

MAINTAINER =		Markus Lude <markus.lude@gmx.de>

# GPLv2
PERMIT_PACKAGE =	Yes

WANTLIB += c crypto daq dnet lzma m nghttp2 pcap pcre pthread z

MASTER_SITES =		https://www.snort.org/downloads/snort/

AUTOCONF_VERSION=       2.69
AUTOMAKE_VERSION=       1.13

SEPARATE_BUILD =	Yes
CONFIGURE_STYLE =	autoconf
CONFIGURE_ARGS +=	--disable-static-daq \
			--enable-non-ether-decoders \
			--disable-open-appid

LIBTOOL_FLAGS =		--tag=disable-static

LIB_DEPENDS =		archivers/xz \
			devel/pcre \
			net/daq \
			net/libdnet \
			www/nghttp2

CONFIGS	=		classification.config gen-msg.map reference.config \
			snort.conf threshold.conf unicode.map

PREPROC =		decoder.rules preprocessor.rules

DOCS =			AUTHORS CREDITS README README.* *.pdf TODO USAGE \
			WISHLIST


post-install:
	${INSTALL_DATA_DIR} ${PREFIX}/share/examples/snort
.for i in ${CONFIGS}
	${INSTALL_DATA} ${WRKSRC}/etc/${i} ${PREFIX}/share/examples/snort
.endfor
	${INSTALL_DATA} ${WRKSRC}/doc/generators ${PREFIX}/share/examples/snort

.for i in ${PREPROC}
	${INSTALL_DATA} ${WRKSRC}/preproc_rules/${i} ${PREFIX}/share/examples/snort
.endfor

	${INSTALL_DATA_DIR} ${PREFIX}/share/doc/snort
.for i in ${DOCS}
	${INSTALL_DATA} ${WRKSRC}/doc/${i} ${PREFIX}/share/doc/snort
.endfor

NO_TEST =		Yes

.include <bsd.port.mk>
