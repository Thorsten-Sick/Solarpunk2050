#!/usr/bin/env python3

from yaml import load, dump
try:
    from yaml import CLoader as Loader, CDumper as Dumper
except ImportError:
    from yaml import Loader, Dumper
import argparse
import random

def list_tables(arguments):
    """ List available tables """

    with open(arguments.filename) as fh:
        data = load(fh, Loader=Loader)
        for entry in data.keys():
            # print(data)
            print(data[entry]["Name"],"   ", data[entry]["Description"])

def random_entry(arguments):
    """ List available tables """

    with open(arguments.filename) as fh:
        data = load(fh, Loader=Loader)
        for entry in data.keys():
            if data[entry]["Name"] == arguments.name:
                print(random.choice(data[entry]["Items"]))


if __name__ == "__main__":


    parser = argparse.ArgumentParser(
                    prog='ProgramName',
                    description='What the program does',
                    epilog='Text at the bottom of help')
    subparsers = parser.add_subparsers(help='sub-command help')
    # create the parser for the "a" command

    parser.add_argument('--filename', default="tables.yaml", help="tables yaml data file")

    parser_list = subparsers.add_parser('list', help='List all tables')
    parser_list.set_defaults(func=list_tables)

    parser_list = subparsers.add_parser('random', help='Show random entry')
    parser_list.set_defaults(func=random_entry)
    parser.add_argument('name', help="Name of the table")

    #parser.add_argument('filename')           # positional argument
    #parser.add_argument('-c', '--count')      # option that takes a value
    #parser.add_argument('-v', '--verbose',
    #                    action='store_true')  # on/off flag


    args = parser.parse_args()
    args.func(args)
