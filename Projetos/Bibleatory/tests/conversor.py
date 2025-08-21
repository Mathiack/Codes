import json
import xml.etree.ElementTree as ET
import argparse

def json_to_usfx(json_path: str, output_path: str):
    with open(json_path, "r", encoding="utf-8") as f:
        data = json.load(f)

    nsmap = {
        "xmlns:xsi": "http://www.w3.org/2001/XMLSchema-instance",
        "xsi:noNamespaceSchemaLocation": "usfx.xsd"
    }

    usfx_root = ET.Element("usfx", nsmap)

    for book in data.get("books", []):
        book_el = ET.SubElement(usfx_root, "book")
        ET.SubElement(book_el, "h").text = book["name"]

        for chapter in book.get("chapters", []):
            ET.SubElement(book_el, "c", {"id": str(chapter["chapter"])})

            for verse in chapter.get("verses", []):
                v = ET.SubElement(book_el, "v", {"id": str(verse["verse"])})
                v.tail = verse["text"]
                ET.SubElement(book_el, "ve")

    tree = ET.ElementTree(usfx_root)
    tree.write(output_path, encoding="utf-8", xml_declaration=True)


if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Converte um JSON de versículos para formato XML USFX.")
    parser.add_argument("input", help="Caminho para o arquivo JSON de entrada")
    parser.add_argument("output", help="Caminho para o XML de saída")
    args = parser.parse_args()

    json_to_usfx(args.input, args.output)
