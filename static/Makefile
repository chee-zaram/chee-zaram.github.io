OUTPUT = resume.pdf
CLEAN  = '*~' '\#*' '.\#*' '.DS_Store' '*.log' '*.aux' '*.toc' '*.nav' '*.out' '*.snm' '*.vrb' '*.blg' '*.bbl'

all: $(OUTPUT);

clean:
	for f in ${CLEAN} ; do find . -name "$$f" | xargs rm -f ; done
	# rm -f ${OUTPUT}

%.pdf: %.tex
	pdflatex -interaction nonstopmode $*.tex

.PRECIOUS: %.pdf ;
