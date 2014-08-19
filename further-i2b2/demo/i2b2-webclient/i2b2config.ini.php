; This is the configuration file for i2b2
; Comments start with ';', as in php.ini

;Audit Configuration
audit.oracle.user = FRTHR_FQE
audit.oracle.password = @FRTHR_FQE@
audit.oracle.connectionString = //localhost:1521/xe

;SSO Configuration
oracle.user = I2B2USER
oracle.password = @I2B2USER@
oracle.connectionString = //localhost:1521/xe
;cas.url = test.go.utah.edu
cas.enabled=false
sso.hmac.secret = @SSO_HMAC_SECRET@

;Data Export Configuration
csv.export.url = http://localhost:9000/fqe/rest/fqe/query/export/CSV

;Demo Configuration
demo=true

;CSRF Protection
nonce.secret=@NONCE_SECRET@
